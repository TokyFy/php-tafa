<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        :root {
            font-size: 10px;
        }

        body {
            font-family: monospace;
            font-size: 1.6rem;
            margin: 1.2rem;
        }

        .name-list {
            max-width: 42rem;
            list-style-type: none;
            border: 1px solid black;
        }

        .name-list li {
            border-left: 2px solid black;
            padding: .6rem .5rem;
            margin: 1.6rem;
            display: flex;
        }

        .name-list li a {
            margin-left: auto;
            color: black;
            font-size: 1rem;
        }

        .name-list li:nth-child(odd) {
            background-color: aliceblue;
        }

        .btn {
            padding: .6rem;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 3.2rem;
            cursor: pointer;
        }

        .form {
            display: flex;
            flex-direction: column;
            max-width: 42rem;
            gap: 0.6rem;
            padding: 1.6rem;
            border: 1px solid black;
            margin-bottom: 1.6rem;
        }

        .form input {
            height: 2.4rem;
        }
    </style>
</head>