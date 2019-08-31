

<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="form_settings">
                <h2>Edit Degree</h2>
                <?php
                if (isset($msg)) {
                    if ($msg == 1) {
                        ?>
                        <div style="color: brown" ></h2>تمت التعديل بنجاح</h2></div>
                        <?php
                    }
                }
                ?>
                <form method="post">
                    <?php
                    // print_r($dataa);
                    $student = StudentModel::get_student_name($dataa->s_id);
                    ?>
                    </select>
                    </p>
                    <p>&nbsp;</p>
                    <input class="contact" type="hidden" name="m_id" value="<?= $_GET['m_id'] ?>" /></p>
                    <input class="contact" type="hidden" name="d_id" value="<?= $dataa->d_id ?>" /></p>
                    <input class="contact" type="hidden" name="s_id" value="<?= $dataa->s_id ?>" /></p>
                <p><span style="font-size: x-large">Student</span><input class="contact" type="text" name="s_name" value="<?= $student->s_name ?>" /></p>
                    <p><span style="font-size: x-large">Degree</span><input class="contact" type="number" name="d_degree" value="<?= $dataa->d_degree ?>" /></p>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Edit" /></p>
                </form>
            </div><!--close form_settings-->
        </div><!--close content_item-->
    </div><!--close content-->
</div>
