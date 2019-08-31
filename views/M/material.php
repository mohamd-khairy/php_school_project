

<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="form_settings">
                 <h2>Add Material <a class="submit" href="index.php?rt=Material/list">Show All Materials</a></h2>
                <h2></h2>

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
                    <p><span style="font-size: x-large">Name</span><input class="contact" type="text" name="m_name" value="" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Teacher</span><input class="contact" type="text" name="m_teacher" value="" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Cost</span><input class="contact" type="number" name="m_money" /></p>
                    <p>&nbsp;</p>
                    <p><span style="font-size: x-large">Details</span><input class="contact" type="text" name="m_details" /></p>
                    <p>&nbsp;</p>
                    <!-- combo box -->

                    <p><span style="font-size: x-large">Primary</span>
                        <select name="m_primary">
                            <option value="الاول الابتدائي">
                                الاول الابتدائي
                            </option>
                            <option value="الثاني الابتدائي">
                                الثاني الابتدائي
                            </option>
                            <option value="الثالث الابتدائي">
                                الثالث الابتدائي
                            </option>
                            <option value="الرابع الابتدائي">
                                الرابع الابتدائي
                            </option>
                            <option value="الخامس الابتدائي">
                                الخامس الابتدائي
                            </option>
                            <option value="السادس الابتدائي">
                                السادس الابتدائي
                            </option>
                            <option value="الاول الاعدادي">
                                الاول الاعدادي
                            </option>
                            <option value="الثاني الاعدادي">
                                الثاني الاعدادي
                            </option>
                            <option value="الثالث الاعدادي">
                                الثالث الاعدادي
                            </option>
                            <option value="الاول الثانوي">
                                الاول الثانوي
                            </option>
                            <option value="الثاني الثانوي">
                                الثاني الثانوي
                            </option>
                            <option value="الثالث الثانوي">
                                الثالث الثانوي
                            </option>
                        </select>
                    </p>
                    <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="ADD" /></p>
                </form>
            </div><!--close form_settings-->
        </div><!--close content_item-->
    </div><!--close content-->
</div>
