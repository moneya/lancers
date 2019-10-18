
@extends('layouts.master')  

@section('styles')
<style>
    *,
    *::after,
    *::before {
        margin: 0;
        padding: 0;
        box-sizing: inherit;
    }

    html,
    body {
        font-family: 'Ubuntu', sans-serif;
        overflow-x: hidden;
    }



    .main-body {
        position: relative;
    }

    ul {
        list-style: none;
    }

    a {
        color: inherit;
        text-decoration: none;

    }

    a:hover {
        color: inherit;
        text-decoration: none;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);
        padding: 1rem 3rem 1rem 0rem !important;
        position: fixed;
        top: 0;
        left: 14rem;
        width: calc(100% - 14rem);
        z-index: 998;
        background-color: white;
        backface-visibility: hidden;
    }

    .main-heading {
        margin-left: 3rem;
        font-size: 2rem;
        font-weight: bold;
    }

    .hamburger {
        display: none;
    }

    .header-lists {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 1rem !important;
        margin-left: 4rem !important;
        position: relative;
        margin: 0;
    }

    .header-lists li {
        display: inline-block;
       
    }
    .login {
        margin-left: 30px;
       
    }

    .profile-photo {
        border-radius: 50%;
    }

    .support-icon {
        height: 30px;
        width: auto;
    }

    .notification-icon {
        height: 24.4px;
        width: auto;
    }

    .profile-photo {
        height: 40px;
        width: auto;
    }

    .support-list {
        display: inline-grid !important;
        grid-template-columns: 1fr 2fr;
        grid-column-gap: 0.4rem;
        align-items: center;
    }

    main {
        margin-top: 4rem;
        margin-left: 14rem;
    }

    .main-image-container {
        margin-top: 10rem;
        margin-bottom: 5rem;
    }

    .main-image {
        display: block;
        margin: 0 auto;
        width: 60%;
        height: auto;
        /* margin-left: 18rem; */
    }

    .second-heading {
        width: 50%;
        text-align: center;
        margin: 0 auto;
        margin-bottom: 5rem;
    }

    .main-form {
        width: 60%;
        margin: 0 auto;
        margin-bottom: 5rem;
    }

    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        background: #091429;
        height: 100vh !important;
        z-index: 999;
        width: 14rem;
        color: white;
        padding-top: 3rem;
        padding-left: 1rem;

    }

    

    

    .sidebar ul li {
        padding: 1rem 0rem;
        text-align: left;
        list-style: none;
        margin-left: 2rem;
    }

    .sidebar ul li a img {
        height: 1.5rem;
        padding-right: 1rem;
    }

    .sidebar ul li a i {
        padding-left: 8px;
    }

    .logo {
        
        text-align: center;
        margin-bottom: 2rem;
    }
    .create-invoice {
        width: 13rem;
        height: 3.5rem;
        background: #0ABAB5;
        color: white;
        border: none;
        font-size: 16px;
        text-align: center;
        margin-left: 40px;
        margin-top: 40px;
        margin-bottom: 20px;


    }



    .content h3 {

        font-family: Ubuntu;
        font-style: normal;
        font-weight: 500;
        font-size: 22px;
        line-height: 32px;
        color: #262626;
        margin-left: 40px;
        margin-bottom: 20px;
    }

    .content p {

        font-weight: normal;

        font-size: 14px;
        line-height: 20px;
        color: #091429;
        margin-left: 40px;
    }

    .sign-up {
        font-family: Ubuntu;
        font-style: normal;
        font-weight: 450;
        font-size: 14px;
        line-height: 20px;
        width: 10.0rem;
        height: 3.5rem;
        background-color: #0ABAB5;
        border: none;
        color: #fff;
        margin-right: 3.7rem;
        margin-left: 2.2rem;
        padding: 10px 40px
    }

    @media(max-width: 1100px) {
        .main-heading {
            font-size: 1.8rem;
        }

        .second-heading {
            font-size: 1.7rem;
            margin-bottom: 4rem;
        }

        .profile-photo {
            height: 30px;
            width: auto;
        }

        .support-icon {
            height: 20px;
            width: auto;
        }

        .notification-icon {
            height: 19.4px;
            width: auto;
        }

        .support-list {
            grid-column-gap: 0
        }
    }

    @media(max-width: 1010px) {
        .second-heading {
            width: 65%;
        }
    }

    @media(max-width: 950px) {
        .header {
            padding: 0.7rem 3rem 0.7rem 0rem !important;
        }

        .main-heading {
            font-size: 1.6rem;
        }

        .second-heading {
            font-size: 1.5rem;
            width: 75%;
        }
    }

    @media(max-width: 850px) {
        .sidebar {
            display: none;
        }

        .profile-list {
            margin-right: 3rem;
        }

        .hamburger {
            position: absolute;
            /* z-index: 1; */
            right: 0;
            top: 1px;
            height: 20px;
            width: 28px;
            cursor: pointer;
            margin-right: 1.6rem;
            padding-right: 0 !important;
        }

        .hamburger-btn {
            /* margin-left: 4rem; */
            display: block;
            /* width: 7px;
      height: 2px; */
            background: black;
            position: absolute;
            right: 0rem;
            top: 12px;
            width: 25px;
            height: 3px;
            transition: 0.5s all ease;
            /* cursor: pointer; */
        }

        .hamburger-btn::before {
            content: '';
            position: absolute;
            top: -8px;
            width: 25px;
            height: 3px;
            background: black;
            transition: 0.5s all ease;
        }

        .hamburger-btn::after {
            content: '';
            position: absolute;
            top: 8px;
            width: 25px;
            height: 3px;
            background: black;
            transition: 0.5s all ease;
        }

        .open-menu {
            display: block !important;
        }

        .cross-hamburger {
            transform: rotate(360deg);
            background: transparent;
        }

        .cross-hamburger::before {
            transform: rotate(45deg) translate(5px, 8px);
        }

        .cross-hamburger::after {
            transform: rotate(-45deg) translate(3px, -7px);
        }

        .header {
            width: 100% !important;
            left: 0;
        }

        main {
            margin-left: 0 !important;
            margin-top: 2.5rem;
        }

        .main-image {
            width: 75%;
        }

        .second-heading {
            width: 70%;
        }

        .main-form {
            width: 70%;
        }
    }

    @media(max-width: 750px) {
        .main-container {
            width: auto !important;
        }

        .main-form,
        .second-heading,
        label,
        input[type=text],
        textarea {
            width: 85%;
        }

        .main-image {
            width: 80%;
        }
    }

    @media(max-width: 670px) {
        .main-heading {
            font-size: 1.5rem;
            margin-left: 15px;
        }

        .support-list img {
            height: 15px;
            width: auto;
        }

        .support-list span {
            font-size: 14px;
        }

        .notification-icon {
            height: 16px;
            width: auto;
        }

        .profile-photo {
            height: 20px;
        }

        .profile-list span {
            font-size: 14px;
        }

        .header-lists {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        .header-lists li {
            padding-right: 1rem;
        }

        .hamburger-btn {
            top: 11px;
            height: 2px;
        }

        .hamburger-btn::before {
            top: -6px;
            height: 2px;
        }

        .hamburger-btn::after {
            top: 6px;
            height: 2px;
        }

        .cross-hamburger::before {
            transform: rotate(45deg) translate(4px, 6px);
        }

        .cross-hamburger::after {
            transform: rotate(-45deg) translate(2px, -5px);
        }
    }

    @media (max-width: 767px) {
        .header {
            display: grid;
            justify-content: center;
            align-items: center;
            grid-row-gap: 0.5rem;
        }

        main {
            margin-top: 7rem;
        }

        .sign-up {
        width: 5.0rem;
        margin-right: 0rem;
    }

    }
</style>
@endsection

@section('sidebar')   

<div class="main-body">
    <header class="header">
        <!-- Header -->
        <div>
            <h1 class="main-heading">Invoices</h1>


        </div>
        <div>
            <ul class="header-lists">
                <li>
                    <a href="/signin.html" class="login" > <span>Login</span></a>
                </li>
                <li class="profile-list">
                    <a href="/signup.html" class="sign-up"> <span> Sign Up</span> </a>
                </li>
                <li class="hamburger" id="menuBtn">
                    <span class="hamburger-btn"></span>
                </li>
            </ul>
        </div>

    </header>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <a href="homepage"><img
                    src="https://res.cloudinary.com/undercover/image/upload/v1570695583/Lancers_xrom7n.png"></a>
        </div>
        <ul>
            <li>
                <a href="documents.html"><img src="https://res.cloudinary.com/undercover/image/upload/v1570695571/home_dsbjg9.svg"
                        alt="" srcset="" /> Dashboard</a>
            </li>
            <li>
                <a href="clientInformation.html"><img
                        src="https://res.cloudinary.com/undercover/image/upload/v1570695570/customer_zs9l05.svg"
                        alt="" srcset="" /> Client</a>
            </li>
            <li>
                <a href=""><img
                        src="https://res.cloudinary.com/undercover/image/upload/v1570695514/lightbulb_tnpl08.svg"
                        alt="" srcset="" /> Project<i class="fa fa-angle-down"></i></a></a>
            </li>
            <li>
                <a href=""><img
                        src="https://res.cloudinary.com/undercover/image/upload/v1570695569/approve-invoice_tiiw8k.svg"
                        alt="" srcset="" />
                    Invoice</a>
            </li>
            <li>
                <a href=""><img
                        src="https://res.cloudinary.com/undercover/image/upload/v1570695583/policy_hqxu0l.svg"
                        alt="" srcset="" /> Contract</a>
            </li>
            <li>
                <a href=""><img
                        src="https://res.cloudinary.com/undercover/image/upload/v1570695556/approval_yxgv04.svg"
                        alt="" srcset="" /> Proposals</a>
            </li>
        </ul>
    </div>
    <main>
        <!-- Main body -->
        <div class="container main-container">

            <div class="content">
                <button class='create-invoice'>Create invoice</button>
                <h3>Estimates helps you place value to your work and time!</h3>
                <p>Create an estimate and easily convert it to an invoice and send to your client.</p>
            </div>

        </div>

    </main>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
const menuBtn = document.getElementById("menuBtn")
const sidebar = document.getElementById("sidebar")
let showMenu = false
menuBtn.addEventListener("click", () => {
    if (!showMenu) {
        sidebar.classList.add("open-menu")
        document.querySelector(".hamburger-btn").classList.add("cross-hamburger")

        showMenu = true;
    } else {
        sidebar.classList.remove("open-menu")
        document.querySelector(".hamburger-btn").classList.remove("cross-hamburger")
        showMenu = false;
    }
})
document.querySelector('.create-invoice').addEventListener('click', () => {
        location.href = "invoice-view.html"
    })
</script>

@endsection