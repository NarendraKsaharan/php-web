<?php
    $selSubChildCate = "SELECT * FROM `categories` WHERE parent_id=".$_childCateData['id']." AND status=1";
    $subChild = $con->query($selSubChildCate);
    if ($_subChildCate = $subChild->num_rows) {
        ?>
            <ul class="sub-dropdown-menu">
                <?php
                        while ($_cate = $_subChildCat->fetch_assoc()) {
                        ?>
                            <li>
                                <a href="category.php?catid<?= $_cate['id'] ?>"><?= $_cate['name'] ?></a>
                            </li>
                        <?php
                        }
                ?>
            </ul>
        <?php   
    }
?>