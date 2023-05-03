<style>
    .menu{
        position: fixed;
        top:0;
        left:0;
        width:100%;
        display:flex;
        background: rgb(80,80,80, 1);
        color:white;
        z-index: 100000;
        padding:20px 30px;
        align-items:center;
        }
        .menu > div{
            width: calc(100% / 3);
            font-size:18px;
            font-family:'roboto', 'Calibri';


        }
        .menu .centro{
            text-align:center;
            text-transform:uppercase;
        }
        .menu .rigth{
            text-align:right;
        }
</style>
<div class="menu">
    <div class="left">
       <?php if(isset($_GET['r'])){
        ?>
         Rotacion: <?php echo $_GET['r']; ?>
        <?php
       } ?>
    </div>
    <div class="centro">
        <?php echo $estudiante['Nombre']; ?>
    </div>
    <div class="rigth">
    <?php echo 'Modulo '. $modulo?>
    </div>
</div>