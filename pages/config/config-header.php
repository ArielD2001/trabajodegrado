    <meta charset="utf-8">
    <meta content="CURN" name="description">
    <link rel="icon" type="image/x-icon" href="../assets/images/logo_sm.png" />
    <link href="../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" id="dark-style">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <style>

        .leftside-menu{
            transition: .1s;
        }
      body{
        overflow: hidden    ;
      }
    .content-page{
        overflow-y:auto; max-height:80vh;
        scroll-behavior: smooth;
        padding-bottom: 30px;
    }
    .content-page::-webkit-scrollbar{
        z-index: 100000000;
        width: 10px;
        background-color: transparent   ;
    }
    .content-page::-webkit-scrollbar-thumb{
        background-color: grey;
        border-radius: 10px;
    }
    table tbody tr{
        transition: .1s;
        font-size: 15px;
    }
    table tbody tr:hover{
        background-color: lightgray;
    }
    .content-page{
        padding-bottom: 100px;
        position: relative;
    }
    
    .load-item{
        width: 10px;
        height: 10px;
        border: 2px solid grey;
        border-top: 2px solid transparent;
        border-radius: 50%;
        animation: giro-item .6s linear infinite;
        margin-top: 9px;
        margin-bottom: 5px;    
    }
@keyframes giro-item {
    from{
        transform: rotate(0deg);
    }
    to{
        transform: rotate(360deg);
    }
}
    </style>