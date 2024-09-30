@extends('layouts.public', ['title'=>'Кориснички профил'])
@section('content')

<div class="container mt-4">
        <div class="row">
            <div class="col-8 offset-2 mt-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Кориснички профил</h1>
                </div>
                <div class="panel panel-default">
                    <section>
                        <header>
                            <h2 class="">
                                Кориснички профил
                            </h2>
                            <p class="">
                                Измените Ваше информације за име, презиме и и-мејл.
                            </p>
                        </header>
                    
                        <form id="send-verification" method="post" action="{{ route('verification.send">
                            @csrf
                        </form>
                    
                        <form method="post" action="{{ route('profile.update" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')
                    
                            <div class="form-group">
                                <label>Име и презиме</label>
                                <x-text-input id="ime_prezime" name="ime_prezime" type="text" class="form-control" :value="old('ime_prezime', $user->ime_prezime)" required autofocus autocomplete="ime_prezime" />
                                <x-input-error class="mt-2" :messages="$errors->get('ime_prezime')" />
                            </div>
                    
                            <div class="form-group">
                                <label>Е-маил</label>
                                <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)" required autocomplete="username" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                            Емаил није верификован.
                    
                                            <button form="send-verification" class="btn btn-primary">
                                                Кликни за слање новог верификационог мејла.
                                            </button>
                                        </p>
                    
                                        @if (session('status') === 'verification-link-sent')
                                            <p class="">
                                                Верификациони линк је послат на емаил.
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                    
                            <div class="mt-3">
                                <button class="btn btn-primary">Сачувај</button>
                    
                                @if (session('status') === 'profile-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400"
                                    >
                                        Сачувано.
                                    </p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
                
                <div class="max-w-xl">
                    
                    <section>
                        <header>
                            <h2 class="">
                                Промените Вашу шифру.
                            </h2>
                    
                            <p class="">
                                Постарајте се да Ваша шифра буде заштићена и да је не заборавите!
                            </p>
                        </header>
                    
                        <form method="post" action="{{ route('password.update" class="mt-6 space-y-6">
                            @csrf
                            @method('put')
                    
                            <div class="form-group">
                                <label>Тренутна шифра</label>
                                <x-text-input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" />
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                            </div>
                    
                            <div class="form-group">
                                <label>Нова шифра</label>
                                <x-text-input id="password" name="password" type="password" class="form-control" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>
                    
                            <div class="form-group">
                                <label>Потврдите шифру</label>
                                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                    
                            <div class="flex items-center gap-4">
                                <button class="btn btn-primary">Сачувај</button>
                    
                                @if (session('status') === 'password-updated')
                                    <p
                                        x-data="{ show: true }"
                                        x-show="show"
                                        x-transition
                                        x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600 dark:text-gray-400"
                                    >Saved.</p>
                                @endif
                            </div>
                        </form>
                    </section>

                </div>
                
            @if (!(Auth::user()->hasRole('admin')))
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        
                        <section class="space-y-6">
                            <header>
                                <h2>
                                    Обришите Ваш налог.
                                </h2>
                        
                                <p class="">
                                    Након брисања Вашег налога, сви његови ресурси и подаци биће трајно избрисани. Пре него што избришете свој налог, молимо Вас да преузмете све податке или информације које желите задржати.
                                </p>
                            </header>
                        
                            <x-danger-button
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                                class="btn btn-danger"
                            >Обришите налог</x-danger-button>
                        
                            <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form method="post" action="{{ route('profile.destroy" class="p-6">
                                    @csrf
                                    @method('delete')
                        
                                    <h2 class="">
                                        Да ли сте сигурни да желите да обришете налог?
                                    </h2>
                        
                                    <p class="">
                                        Када се обрише ваш налог, сви његови ресурси и подаци биће трајно избрисани. Унесите своју лозинку да потврдите да желите трајно обрисати свој налог.
                                    </p>
                        
                                    <div class="form-group">
                                        <label>Password</label>
                        
                                        <x-text-input
                                            id="password"
                                            name="password"
                                            type="password"
                                            class="form-control"
                                            placeholder="Шифра"
                                        />
                        
                                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                    </div>
                        
                                    <div class="mt-6 flex justify-end">
                                        <x-secondary-button x-on:click="$dispatch('close')" class="btn btn-secondary">
                                            Одустаните
                                        </x-secondary-button>
                        
                                        <x-danger-button class="ms-3" class="btn btn-danger">
                                            Обришите налог
                                        </x-danger-button>
                                    </div>
                                </form>
                            </x-modal>
                        </section>

                        
                    </div>
                </div>
            @endif
            </div>
        </div>
    </div>
@endsection
