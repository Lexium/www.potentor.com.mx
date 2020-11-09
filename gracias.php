<?php
header('Content-Type: text/html; charset=UTF-8');
$archivo_previo = __FILE__;
include 'lang/idioma.php';
include 'header.php';
?>
<style type="text/css">
    .hidden{
        opacity: inherit!important;
    }
</style>
<div class="thanks p-5 post text-center">
    <div class="container">
        <h1 class="py-5" style="font-size:2.8rem;"><?php lang('tks_text01');?></h1>
        <h3 class="pb-5" style="font-weight: 300;"><?php lang('tks_text02');?></h3>
    </div>
</div>

<script src="./js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

      $("article").each(function(){
        $(this).addClass('col-md-4');
        $(this).find('img').first().css({"width": "100%", "height": "auto"})
      });


    });

</script>
<?php include 'footer.php' ?>
