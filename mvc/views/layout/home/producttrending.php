<div class="products" data-aos="zoom-in">
    <?php

    for ($i = 0; $i < 8; $i++) {
        $data["product"][$i]["id"];
    ?>
        <div class="col">
            <div class="product-img">
                <div class="img img1"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data["product"][$i]["image1"]; ?>" alt=""></div>
                <div class="img img2"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data["product"][$i]["image2"]; ?>" alt=""></div>
                <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                <div class="hover-button" id="item<?php echo $data["product"][$i]["id"]; ?>">

                    <a class="bt-view flex bt" href="<?php echo URL . 'layout/detail/' . $data["product"][$i]["id"]; ?>">
                        <span class="flex view">Chi Tiết</span>
                        <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                    </a>
                    <a class="bt-add flex bt addCart" data-id="<?php echo $data["product"][$i]["soluong"] ?>" href="<?php echo URL . 'cart/store/' . $data["product"][$i]["id"]; ?>">
                        <span data-id="<?php echo $data["product"][$i]["id"] ?>" class="flex">Mua Hàng</span>
                        <span id="input<?php echo $data["product"][$i]["id"] ?>" class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                        <input id="name" type="hidden" value="
                   <?php
                    if (isset($_SESSION['name'])) {
                        echo $_SESSION['name'];
                    } else {
                        echo 0;
                    }
                    ?>">
                    </a>
                </div>
                <div><input type="hidden" id="sltrongkho<?php echo $data["product"][$i]["id"]; ?>" value="<?php echo $data["product"][$i]["soluong"] ?>"></div>
            </div>
            <div class="product-info">
                <div class="pr-name">
                    <a href="#"><?php echo $data["product"][$i]["tensanpham"] ?></a>
                </div>
                <div class="pr-price flex">
                    <p class="cost">350.000 đ </p>
                    <p class="pr-sale">
                        <?php
                        $formattedTong = 0;
                        if (isset($data["product"][$i]["gia"])) {
                            $tong = $data["product"][$i]["gia"];
                            $formattedTong = number_format($tong, 0, ',', '.');
                            echo $formattedTong . 'đ';
                        } else if (!isset($data["product"][$i]["gia"])) {

                            echo $formattedTong . 'đ';
                        }

                        ?>


                    </p>
                </div>
            </div>
        </div>

    <?php
    }
    ?>
    <div class="button-show-product flex">
        <button>Load more</button>
    </div>
    <?php
    for ($i = 8; $i < 16; $i++) {
    ?>
        <div class="col dn">
            <div class="product-img">
                <div class="img img1"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data["product"][$i]["image1"]; ?>" alt=""></div>
                <div class="img img2"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data["product"][$i]["image2"]; ?>" alt=""></div>
                <a href="#" class="wishlist"><i class="fas fa-heart"></i></a>
                <div class="hover-button" id="item<?php echo $data["product"][$i]["id"]; ?>">

                    <a class="bt-view flex bt" href="<?php echo URL . 'layout/detail/' . $data["product"][$i]["id"]; ?>">
                        <span class="flex view">Chi Tiết</span>
                        <span class="bt-icon flex"> <i class="far fa-eye"></i></span>
                    </a>
                    <a class="bt-add flex bt addCart" data-id="<?php echo $data["product"][$i]["soluong"] ?>" href="<?php echo URL . 'cart/store/' . $data["product"][$i]["id"]; ?>">
                        <span data-id="<?php echo $data["product"][$i]["id"] ?>" class="flex">Mua Hàng</span>
                        <span id="input<?php echo $data["product"][$i]["id"] ?>" class="bt-icon flex"> <i class="fas fa-shopping-cart"></i></span>
                        <input id="name" type="hidden" value="
                   <?php
                    if (isset($_SESSION['name'])) {
                        echo $_SESSION['name'];
                    } else {
                        echo 0;
                    }
                    ?>">
                    </a>
                </div>
                <div><input type="hidden" id="sltrongkho<?php echo $data["product"][$i]["id"]; ?>" value="<?php echo $data["product"][$i]["soluong"] ?>"></div>
            </div>
            <div class="product-info">
                <div class="pr-name">
                    <a href="#"><?php echo $data["product"][$i]["tensanpham"] ?></a>
                </div>
                <div class="pr-price">
                    <p class="cost">350.000 đ </p>
                    <p class="pr-sale">
                        <?php
                        $formattedTong = 0;
                        if (isset($data["product"][$i]["gia"])) {
                            $tong = $data["product"][$i]["gia"];
                            $formattedTong = number_format($tong, 0, ',', '.');
                            echo $formattedTong . 'đ';
                        } else if (!isset($data["product"][$i]["gia"])) {

                            echo $formattedTong . 'đ';
                        }

                        ?>


                    </p>
                </div>
            </div>
        </div>


    <?php
    }
    ?>
</div>