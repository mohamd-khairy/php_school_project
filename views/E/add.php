

<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="form_settings">
                <h2>Add Exam <a class="submit" href="index.php?rt=Exam/list">Show All Exams</a></h2>
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
                    <p><span style="font-size: x-large">Time</span><input class="contact" type="time" name="e_time" value="" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Date</span><input class="contact" type="date" name="e_date" value="" /></p>
                     <p>&nbsp;</p>
                     <p><span style="font-size: x-large">Degree</span><input class="contact" type="number" name="e_degree" value="" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large"> Other details</span><textarea class="contact textarea" rows="3" cols="20" name="e_details"></textarea></p>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="ADD" /></p>
                </form>
            </div><!--close form_settings-->
        </div><!--close content_item-->
    </div><!--close content-->
</div>
