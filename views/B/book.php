

<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="form_settings">
                 <h2>Add Book <a class="submit" href="index.php?rt=Book/list">Show All Books</a></h2>
                <?php
                if (isset($msg)) {
                    if ($msg == 1) {
                        ?>
                        <div style="color: brown" ></h2>تمت الاضافه بنجاح</h2></div>
                        <?php
                    }
                }
                ?>
                <form method="post">
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Student</span>
                        <?php
                        $data = StudentModel::getAllData();
                        ?>
                        <select name="s_id">
                            <?php foreach ($data as $stu) { ?>
                                <option value="<?= $stu['s_id'] ?>">
                                    <?= $stu['s_name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Material</span>
                        <?php
                        $data = MaterialModel::getAllData();
                        ?>
                        <select name="m_id">
                            <?php foreach ($data as $mat) { ?>
                                <option value="<?= $mat['m_id'] ?>">
                                    <?= $mat['m_name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Pay</span><input class="contact" type="number" name="b_pay" value="" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Date</span><input class="contact" type="date" name="b_date" value="" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large"> Other details</span><textarea class="contact textarea" rows="3" cols="20" name="b_details"></textarea></p>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="ADD" /></p>
                </form>
            </div><!--close form_settings-->
        </div><!--close content_item-->
    </div><!--close content-->
</div>
