

<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="form_settings">
                <h2>Add Degree <a class="submit" href="index.php?rt=Degree/list">Show All Degree</a></h2>
             
                <form method="post">
                 
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Exam</span>
                        <?php
                        $data = ExamModel::getAllData();
                        ?>
                        <select name="m_id">
                            <?php foreach ($data as $exam) { 
                                $material=  MaterialModel::get_material_by_id($exam['m_id']);
                                foreach ($material as $mat){
                                ?>
                                <option value="<?= $mat['m_id'] ?>">
                                    <?= $mat['m_name'] ?>
                                </option>
                            <?php } }?>
                        </select>
                    </p>
                    <p>&nbsp;</p>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="ADD" /></p>
                </form>
            </div><!--close form_settings-->
        </div><!--close content_item-->
    </div><!--close content-->
</div>
