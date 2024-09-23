<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uskoro...</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="hero-section">
        <div class="hero-content">
            <h1>Uskoro...</h1>
            <p>Naša stranica je u izradi. Hvala vam na strpljenju!</p>
        </div>
    </section>

    <footer>
        <p>Copyrights © 2024.</p>
    </footer>
</body>
</html>

<style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        color: #333;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    header {
        background-color: #3592d4;
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo img {
        width: 120px;
    }

    .nav-links {
        list-style-type: none;
        display: flex;
        gap: 20px;
    }

    .nav-links li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
    }

    .login-btn a {
        color: white;
        background-color: #cceaff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }

    .hero-section {
        background: linear-gradient(to right, #3592d4, #cceaff);
        color: white;
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 50px 20px;
    }

    .hero-content h1 {
        font-size: 64px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .hero-content p {
        font-size: 24px;
    }

    footer {
        background-color: #3592d4;
        color: white;
        text-align: center;
        padding: 20px;
    }

</style>