<?php
    require_once(__DIR__ . "/partials/head.php");
    if(isset($_SESSION['user'])){
        ?>
            <h1>Bienvenue <?= $_SESSION['user']['pseudo'] ?></h1>
        <?php
        if($subjects){
            foreach($subjects as $subject)
            ?>
            <div class="card">
                <div class="card-header bg-info">
                    <h2><?= $subject['title'] ?></h2>
                    <p class="fst-italic"><?= $subject['creation_date'] ?></p>
                </div>
           
            <div class="card-body">
                <p class="card-text"><?= $subject['description'] ?></p>
                <a href="#" class="btn btn-info">Aller voir le sujet</a>
            </div>
            </div>
            <?php
        }
    }else {
?>
    <h1>Bienvenue à toi !</h1>
    
<?php
}
    include_once(__DIR__ . "/partials/footer.php");
?>