@extends('admin_pages.templates.template')
@section('content')
<div id="main-content">
    <div class="m-b-20 clearfix">
        <div class="page-title pull-left">
            <h3 class="pull-left"><strong>Manage Products</strong></h3>
        </div>
        <div class="pull-right">
            <a href="ecommerce_product_view.html" class="btn btn-success m-t-10"><i class="fa fa-plus p-r-10"></i> Add a product</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
                            <table id="products-table" class="table table-tools table-hover">
                                <thead>
                                <tr>
                                    <th style="min-width:70px"><strong>ID</strong>
                                    <th><strong>Product</strong>
                                    </th>
                                    <th><strong>Reference</strong>
                                    </th>
                                    <th><strong>Category</strong>
                                    </th>
                                    <th><strong>Price</strong>
                                    </th>
                                    <th><strong>Date added</strong>
                                    </th>
                                    <th style="width:10%;text-align:center"><strong>Stock</strong>
                                    </th>
                                    <th class="text-center"><strong>Sales</strong>
                                    </th>
                                    <th class="text-center"><strong>Status</strong>
                                    </th>
                                    <th class="text-center"><strong>Actions</strong>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Product 1</td>
                                    <td>SV 456 878 647</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$25.20</strong></td>
                                    <td>02/03/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="75">2654</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#7BB2B4"
                                             data-sparkline-value="[13,14,16,15,4,14,20,14,12,16,11,17,19,16]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Product 2 <span class="label bg-red">Low Stock</span>
                                    </td>
                                    <td>BG 588 735 457</td>
                                    <td>Menu / Shoes</td>
                                    <td><strong>$22.55</strong></td>
                                    <td>02/11/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" data-aria-valuetransitiongoal="21">458</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[14,17,16,12,15,16,22,15,14,17,11,18,11,12]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-danger w-300">Deleted</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Product 3</td>
                                    <td>YT 124 856 565</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="58">2547</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-dark w-300">Offline</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Product 4</td>
                                    <td>SV 456 878 647</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$34.25</strong></td>
                                    <td>02/03/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="75">1645</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#7BB2B4" data-sparkline-value="[18,10,11,14,4,14,20,14,18,11,10,15,19,16]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Product 5</td>
                                    <td>BG 588 735 457</td>
                                    <td>Menu / Shoes</td>
                                    <td><strong>$42.78</strong></td>
                                    <td>03/07/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" data-aria-valuetransitiongoal="21">567</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[8,12,16,12,11,16,22,15,14,17,10,13,11,16]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-danger w-300">Deleted</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Product 6</td>
                                    <td>YT 124 856 565</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="58">2245</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-dark w-300">Offline</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Product 7</td>
                                    <td>FR 587 657 658</td>
                                    <td>Children / Shirts</td>
                                    <td><strong>$25.20</strong></td>
                                    <td>02/03/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="75">1244</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#7BB2B4" data-sparkline-value="[13,14,16,15,4,14,20,14,12,16,11,17,19,16]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Product 8 <span class="label bg-red">Low Stock</span>
                                    </td>
                                    <td>RE 547 254 698</td>
                                    <td>Children / Shirts</td>
                                    <td><strong>$22.55</strong></td>
                                    <td>02/11/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" data-aria-valuetransitiongoal="21">364</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[14,17,16,12,15,16,22,15,14,17,11,18,11,12]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-danger w-300">Deleted</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Product 9</td>
                                    <td>MP 365 456 656</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$21.80</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="58">657</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-dark w-300">Offline</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Product 10</td>
                                    <td>AZ 987 581 554</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$19.25</strong></td>
                                    <td>02/03/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="19">557</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#7BB2B4" data-sparkline-value="[13,14,16,15,4,14,20,14,12,16,11,17,19,16]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Product 11 <span class="label bg-red">Low Stock</span>
                                    </td>
                                    <td>HB 587 658 544</td>
                                    <td>Children / Shirts</td>
                                    <td><strong>$26.45</strong></td>
                                    <td>02/11/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" data-aria-valuetransitiongoal="12">788</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[7,17,5,12,17,10,22,15,14,17,19,18,11,5]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-danger w-300">Deleted</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Product 12</td>
                                    <td>VC 257 545 668</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$25.36</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="64">1354</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,16,14,12,12,25,16,18,16,12,15,17,15]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-dark w-300">Offline</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Product 13</td>
                                    <td>SQ 658 552 331</td>
                                    <td>Children / Shirts</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="66">3657</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Product 14</td>
                                    <td>UY 552 222 545</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>14/08/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="35">545</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#7BB2B4" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-danger w-300">Deleted</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Product 15</td>
                                    <td>NB 112 547 698</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>24/03/2012</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="62">2547</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Product 16</td>
                                    <td>XC 545 698 232</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$15.65</strong></td>
                                    <td>16/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="65">2547</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[25,6,15,14,13,12,21,16,18,14,12,15,19,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Product 17</td>
                                    <td>JN 221 687 756</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="87">3654</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#7BB2B4" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-dark w-300">Offline</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Product 18</td>
                                    <td>UH 554 354 587</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="42">1254</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Product 19</td>
                                    <td>AZ 558 332 544</td>
                                    <td>Women / Underwear</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="65">7586</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#c3a8db" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-dark w-300">Offline</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Product 20</td>
                                    <td>RE 654 321 987</td>
                                    <td>Children / Shirts</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="58">2547</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#7BB2B4" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Product 21</td>
                                    <td>QS 225 647 699</td>
                                    <td>Children / Shirts</td>
                                    <td><strong>$21.00</strong></td>
                                    <td>04/09/2013</td>
                                    <td class="color-success">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" data-aria-valuetransitiongoal="58">2547</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="sparkline" data-sparkline-color="#8dae24" data-sparkline-value="[18,14,15,14,13,12,21,16,18,14,12,15,17,19]"></div>
                                    </td>
                                    <td class="text-center">
                                        <span class="label label-success w-300">Online</span>
                                    </td>
                                    <td class="text-center ">
                                        <a href="ecommerce_product_view.html" class="edit btn btn-sm btn-default"><i class="fa fa-pencil"></i> Edit</a>
                                        <a href="#" class="delete btn btn-sm btn-default"><i class="fa fa-times-circle"></i> Remove</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page_style')
@endsection
@section('page_script')
    <script src=""></script>
    <script src="{{ asset('admin_pages/js/bootstrap-switch.js')}}"></script>
    <script src="{{ asset('admin_pages/js/bootstrap-progressbar.js')}}"></script>
    <script src="{{ asset('admin_pages/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin_pages/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('admin_pages/js/dataTables.tableTools.js')}}"></script>
    <script src="{{ asset('admin_pages/js/table.editable.jsj')}}"></script>
    <script src="{{ asset('admin_pages/js/ecommerce.js')}}"></script>
@endsection