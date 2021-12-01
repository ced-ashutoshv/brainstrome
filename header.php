<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            border-size: border-box;
        }
        
        html, body {
            height: 100vh;
            background: #666666;
            font-family: 'Balsamiq Sans', sans-serif;
        }
        
        body {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card {
            width: 70%;
            padding: 30px 90px 90px 90px;
            border: 6px solid rgba(0, 0, 0, 0.3);
            box-shadow: 20px 20px 0 rgba(0, 0, 0, 0.3);
            border-radius: 50px;
            position: relative;
        }
        
        .card h2 {
            color: rgba(0, 0, 0, 0.3);
            font-size: 60px;
            text-transform: uppercase;
        }
        
        .card .row {
            position: relative;
            width: 100%;
            display: grid;
            grid: auto / auto auto;
            grid-template-columns: repeat(auto-fit,minmax(40%, 1fr));
            grid-gap: 30px;
        }
        
        .card .row .col {
            position: relative;
            width: 100%;
            margin: 30px 20px 40px 0;
            transition: 0.5s;
        }
        
        .card .row .form-group {
            position: relative;
            width: 100%;
            height: 40px;
            color: #ffffff;
        }
        
        .card .row .form-group input,
        .card .row .form-group textarea {
            position: absolute;
            width: 90%;
            height: 100%;
            background: transparent;
            outline: none;
            font-size: 24px;
            padding: 10px 0 10px 20px;
            border: 5px solid rgba(0, 0, 0, 0.3);
            box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.3);
            color: #ffffff;
            border-radius: 50px;
        }
        
        .card .row .form-group label {
            line-height: 40px;
            color: #ffffff;
            font-size: 24px;
            margin: 0 0 0 30px;
            display: block;
            pointer-events: none;
        }
        
        .row .col:nth-child(6) {
            margin-top: 64px;
        }
        
        .card .row .form-group input:focus,
        .card .row .form-group textarea:focus {
            border: 5px solid #ffffff;
            transition: all 0.5s;
        }
        
        .card .row input[type="submit"] {
            border: 5px solid rgba(0, 0, 0, 0.3);
            box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.3);
            padding: 10px;
            height: 100%;
            width: 50%;
            cursor: pointer;
            outline: none;
            background: transparent;
            text-transform: uppercase;
            color: #ffffff;
            line-height: 40px;
            font-size: 24px;
            font-weight: 700;
            border-radius: 45px;
            transition: all 0.4s;
        }
        
        .card .row input[type="submit"]:hover {
            border: 5px solid rgba(255, 255, 255, 1);
            color: #ffffff;
            transition: all 0.4s;
        }
        
        @media screen and (max-width: 900px) {
            .card .row {
            grid-template-columns: repeat(auto-fit,minmax(70%, 1fr));
            }
            
            .card {
            padding: 20px;
            }
            
            .card h2 {
            font-size: 34px;
            }
            
            .card .row input[type="submit"] {
            width: 100%;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        console.log( 'sdbjhdsbfj' );
    </script>
</head>