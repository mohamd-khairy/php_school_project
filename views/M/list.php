 
<div id="site_content">	
    <div id="content">
        <div class="content_item">
            <div class="form_settings">
                <table class="table" border="1">
                    <tr class="">
                        <td class="">#</td>
                        <td class=""><h1 style="color: #000">NAME</h1></td>
                        <td class=""><h1 style="color: #000">TEACHER</h1></td>
                        <td class=""><h1 style="color: #000">COST</h1></td>
                         <td class=""><h1 style="color: #000">PRIMARY</h1></td>
                        <td class=""><h1 style="color: #000">OTHER DETAILS</h1></td>
                        <td class=""><h1 style="color: #888">CONTROL</h1></td>
                    </tr>

                    <?php
                    $data = MaterialModel::getAllData();
                    $i = 1;
                    foreach ($data as $mat) {
                        ?>
                        <tr class="">
                            <td class=""><h2 style="color: #888"><?= $i; ?><h2></td>
                                        <td class=""><h2 style="color: #B5712A"><?= $mat['m_name'] ?></h2></td>
                                        <td class=""><h2 style="color: #B5712A"><?= $mat['m_teacher'] ?></h2></td>
                                        <td class=""><h2 style="color:#B5712A"><?= $mat['m_money'] ?></h2></td>
                                        <td class=""><h2 style="color: #B5712A"><?= $mat['m_primary'] ?></h2></td>
                                        <td class=""><h2 style="color: #B5712A"><?= $mat['m_details'] ?></h2></td>
                                        <td class="" style="color: ghostwhite"><a href="index.php?rt=Material/delete&m_id=<?= $mat['m_id'] ?>">DELETE |</a><a href="index.php?rt=Material/edit&m_id=<?= $mat['m_id'] ?>">| EDIT</a></td>
                                        </tr>
                                        <?php $i++;
                                    }
                                    ?>
                                    </table>
                                    </div><!--close form_settings-->
                                    </div><!--close content_item-->
                                    </div><!--close content-->
                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    