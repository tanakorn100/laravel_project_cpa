<td><a class="linkright" href="#existingcase?case_id=<?php echo $row_mycases['case_id']; ?>"</a></td>

<div class="tabright" id="existingcase">
    <?php
    $c_id = $_GET['case_id'];
    echo $c_id;
    ?>
</div>

<script>
$(".linkright").click(function(){
    $(".tabright").hide();
    theDiv = $(this).attr("href");
    $(theDiv).slideToggle();
});
</script>
