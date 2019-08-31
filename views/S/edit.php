

<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="form_settings">
                <h2>Edit Student <a class="submit" href="index.php?rt=Student/list">Show All Student</a></h2>
                <h2></h2>

                <?php
                if (isset($msg)) {
                    if ($msg == 1) {
                        ?>
                        <div style="color: brown" ></h2>تمت التعديل بنجاح</h2></div>
                        <?php
                    }
                }
                //print_r($data);
                ?>
                <form method="post">
                    <input type="hidden" name="s_id" value="<?= $data->s_id?>"/>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Name</span><input class="contact" type="text" name="s_name" value="<?= $data->s_name?>" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Phone</span><input class="contact" type="text" name="s_phone" value="<?= $data->s_phone?>" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Address</span><textarea class="contact textarea" rows="2" cols="15" name="s_address"><?= $data->s_address?></textarea></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large"> Other details</span><textarea class="contact textarea" rows="3" cols="20" name="s_details"><?= $data->s_details?></textarea></p>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Edit" /></p>
                </form>
            </div><!--close form_settings-->
        </div><!--close content_item-->
    </div><!--close content-->
</div>
