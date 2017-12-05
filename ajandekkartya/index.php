<?php //$this->display("public/header.php"); ?>

<?php $giftcard_types = json_decode('{"5000":{"value":5000,"name":"5 000 Ft","description":"5 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-5000.jpg","mini_image":"meska-ajandekkartya-5000-mini.jpg","shop_count":1},"6000":{"value":6000,"name":"6 000 Ft","description":"6 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-6000.jpg","mini_image":"meska-ajandekkartya-6000-mini.jpg","shop_count":1},"7000":{"value":7000,"name":"7 000 Ft","description":"7 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-7000.jpg","mini_image":"meska-ajandekkartya-7000-mini.jpg","shop_count":1},"8000":{"value":8000,"name":"8 000 Ft","description":"8 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-8000.jpg","mini_image":"meska-ajandekkartya-8000-mini.jpg","shop_count":1},"9000":{"value":9000,"name":"9 000 Ft","description":"9 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-9000.jpg","mini_image":"meska-ajandekkartya-9000-mini.jpg","shop_count":1},"10000":{"value":10000,"name":"10 000 Ft","description":"10 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-10000.jpg","mini_image":"meska-ajandekkartya-10000-mini.jpg","shop_count":2},"12000":{"value":12000,"name":"12 000 Ft","description":"12 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-12000.jpg","mini_image":"meska-ajandekkartya-12000-mini.jpg","shop_count":2},"15000":{"value":15000,"name":"15 000 Ft","description":"15 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-15000.jpg","mini_image":"meska-ajandekkartya-15000-mini.jpg","shop_count":2},"18000":{"value":18000,"name":"18 000 Ft","description":"18 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-18000.jpg","mini_image":"meska-ajandekkartya-18000-mini.jpg","shop_count":2},"20000":{"value":20000,"name":"20 000 Ft","description":"20 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-20000.jpg","mini_image":"meska-ajandekkartya-20000-mini.jpg","shop_count":3},"25000":{"value":25000,"name":"25 000 Ft","description":"25 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-25000.jpg","mini_image":"meska-ajandekkartya-25000-mini.jpg","shop_count":3},"30000":{"value":30000,"name":"30 000 Ft","description":"30 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-30000.jpg","mini_image":"meska-ajandekkartya-30000-mini.jpg","shop_count":3},"40000":{"value":40000,"name":"40 000 Ft","description":"40 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-40000.jpg","mini_image":"meska-ajandekkartya-40000-mini.jpg","shop_count":3},"50000":{"value":50000,"name":"50 000 Ft","description":"50 000 Ft-os Meska aj\u00e1nd\u00e9kk\u00e1rtya","image":"meska-ajandekkartya-50000.jpg","mini_image":"meska-ajandekkartya-50000-mini.jpg","shop_count":3}}', true)?>

    <table class="box full_box">
        <tr>
            <td class="box_content box_content_padd" style="text-align: justify;">

                <h2>Ajándékkártya vásárlása</h2><br>

                Válaszd ki a megvásárolni kívánt ajándékkártyát:<br><br>

                <form action="" method="post" id="gc_form">
                    <table style="width: 100%;">
                        <tr>

                            <?php
                            foreach ($giftcard_types as $key => $card_types) {
                                if ($card_types['value'] <= 15000 && $card_types['value'] % 5000 == 0) {
                                    ?>
                                    <td align="center">
                                        <img style="border: 1px solid #bbbbbb; padding: 5px;" src="https://www.meska.hu/images/ajandekkartya/<?= $card_types['mini_image'] ?>" alt="<?= $card_types['description'] ?>" title="<?= $card_types['description'] ?>"/>
                                        <br>
                                        <strong><?= $card_types['name'] ?></strong>
                                        <br>
                                        <input type="radio" name="selected_card" value="<?= $key ?>" />
                                    </td>
                                <?php } ?>
                            <?php } ?>
                            <td align="center" style="width: 210px;">
                                <div style="height: 165px; width:180px;  padding: 5px; border: 1px solid #bbbbbb; margin: 0 0 2px 0; box-sizing: content-box;">
                                    <div id="other_bg" style="width: 180px; height: 165px; background-image: url('https://www.meska.hu/images/ajandekkartya/meska-ajandekkartya-5000-mini.jpg');">
                                        <div id="other_blur" style="position: absolute; width: 180px; height: 165px; background-color: rgba(100,100,100,0.5);"></div>
                                        <select id="other_select" name="other_giftcard" style="margin: 5px;" class="right" disabled="disabled">
                                            <?php foreach ($giftcard_types as $key => $card_types) { ?>
                                                <option value="<?= $card_types['value'] ?>"><?= $card_types['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <strong>Más összeg</strong>
                                <br>
                                <input id="other_checkbox" type="radio" name="selected_card" value="other" />
                            </td>
                        </tr>
                    </table>
                    <script>
                        $("#gc_form input[type=radio]").change(function(){
                            if ($("#other_checkbox").prop('checked')){
                                console.log('t');
                                $("#other_select").removeAttr('disabled');
                                $("#other_blur").slideUp(200);
                            } else {
                                $("#other_select").attr('disabled', true);
                                $("#other_blur").slideDown(200);
                            }
                        });

                        $("#other_select").change(function(){
                            $("#other_bg").css(
                                'background-image',
                                'url("<?= $_urlPrefix ?>/images/ajandekkartya/meska-ajandekkartya-'+$("#other_select").val()+'-mini.jpg")'
                            );
                        });
                    </script>
                    <span class="error"><?= $error ?></span>
                    <br>
                    Az ajándékkártya megvásárlásával elfogadom a <a href="<?= $_urlPrefix ?>/Ajandekkartya/aff">Meska Ajándékkártya Felhasználási Feltételeit</a>.<br><br>

                    <?php if (time() < strtotime("2013-12-28 00:00:00")) { ?>
                        <span class="error">Figyelem! Az ajándékkártya 2013. december 27-től vásárolható le a Meskán.</span><br><br>
                    <?php } ?>
                    <a class="btn left" href="/">Vissza a nyitólapra</a>
                    <input class="btn right" type="submit" name="gift_card_submit" value="Megveszem" />

                </form>

            </td>
            <td class="box_left"></td>
        </tr>
        <tr>
            <td class="box_butt"></td>
            <td class="box_corner"></td>
        </tr>
    </table>

<?php //$this->display("public/footer.php"); ?>