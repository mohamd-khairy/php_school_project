

<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="form_settings">
                <h2>Add Degree</h2>
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
                    <p><span  style="font-size: x-large">Student</span>
                        <?php
                        $data = BookModel::get_student_by_id($m_id);
                        ?>
                        <select name="s_id">
                            <?php
                            foreach ($data as $stu) {
                                $student = StudentModel::get_student($stu['s_id']);
                                foreach ($student as $s) {
                                    ?>
                                    <option value="<?= $s['s_id'] ?>">
                                        <?= $s['s_name'] ?>
                                    </option>
                                <?php }
                            }
                            ?>
                        </select>
                    </p>
                    <p>&nbsp;</p>
                    <input class="contact" type="hidden" name="m_id" value="<?= $m_id ?>" /></p>
                    <p><span style="font-size: x-large">Degree</span><input class="contact" type="number" name="d_degree" value="" /></p>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="ADD" /></p>
                </form>
            </div><!--close form_settings-->
        </div><!--close content_item-->
    </div><!--close content-->
</div>
