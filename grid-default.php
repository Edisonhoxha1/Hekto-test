<?php
    include('headerLink.php');
    include('headingBar.php');
    include('header.php');
?>

<div class="shop-grid-default bg-gray-100 mt-6 mb-32 h-72">
    <div class="px-28 absolute inline-block pt-24 whitespace-nowrap">
        <h3 class="shopp-grid-name text-4xl">Shop Grid Default</h3>
        <div class="page-list mt-2">
            <a href="#" class="text-base">Home.</a>
            <a href="#" class="text-base">Pages.</a>
            <a href="#" class="text-base">Shop Grid Default</a>
        </div>
    </div>
</div>
<section class="grid-default-page mx-28">
    <div class="acceories flex flex-col md:flex-row lg:justify-between mb-36">
        <div class="acceories-result">
            <p class="ecommerce-acceories text-xl">Ecommerce Acceories & Fashion item</p>
            <p class="acceories-category text-xs pt-2">About 9,620 results (0.62 seconds)</p>
        </div>
        <div class="acceories-category flex flex-col md:flex-row lg:justify-end text-base mt-2">
            <div class="page-nr pr-7 mb-7 md:mb-0 lg:mb-0">
                <label for="page">Per Page:</label>
                <input type="text" class="border-2 border-gray-100 w-14 h-6">
            </div>
            <div class="sort-by pr-7 mb-7 md:mb-0 lg:mb-0">
                <label for="sort">Sort By:</label>
                <select class="dropdown-sort bg-transparent border-2 border-gray-100 w-24 h-7 text-xs"><a href="#" class="sort"></a>
                    <option class="bg-transparent text-xs" value="Best Match">Best Match</option>
                </select>
            </div>
            <div class="view">
                <label for="view">View:</label><i class="fa fa-th-large px-1.5" aria-hidden="true"></i><a href="shopList.php"><i class="fa fa-list pr-6" aria-hidden="true"></i></a>
                <input type="text" class="border-2 border-gray-100 w-40 h-7">
            </div>
        </div>
    </div>
    <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
        <div class="m-auto">   
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img1.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img2.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div >
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64"> 
                <div class="m-auto">
                    <img src="image/img3.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img4.png" class="w-36 h-36">
                </div>
            </div>    
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img5.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img6.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img1.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img1.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img5.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img6.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img1.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
        <div class="m-auto">
            <div class="bg-gray-100 grid grid-cols-1 h-72 w-64">
                <div class="m-auto">
                    <img src="image/img1.png" class="w-36 h-36">
                </div>
            </div>
            <div class="product-info text-center">
                <p class="product-title text-lg pb-2 pt-4">Ecommerce accesories</p>
                <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                <div class="price-form flex justify-center text-sm pt-3.5">
                    <p class="price pr-2.5">$26.00</p>
                    <p class="discount-price">$42.00</p>
                </div>    
            </div>
        </div>
    </div>
    
    <div class="flex justify-center mb-20">
        <img src="image/img-gridPage.png">
    </div>
    
</section>

<?php
    include('footer.php');
?>