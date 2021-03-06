@extends('admin_pages.templates.template')
@section('content')
<div id="main-content">
    <div class="m-t-10 m-b-10 no-print">
        <button type="button" class="btn btn-primary m-r-10 m-b-10"><i class="fa fa-dollar m-r-10"></i> Make A Payment</button>
        <button type="button" class="btn btn-white m-r-10 m-b-10" onclick="window.print();"><i class="fa fa-print m-r-10"></i> Print Invoice</button>
        <button type="button" class="btn btn-white m-r-10 m-b-10" onclick="window.print();"><i class="fa fa-file-text m-r-10"></i> Export as PDF</button>
        <button type="button" class="btn btn-white m-r-10 m-b-10"><i class="fa fa-envelope m-r-10"></i> Send by email</button>
    </div>




    <div class="row invoice-page">
        <div class="col-md-12 p-t-0">
            <div class="invoice panel panel-default p-40">
                <div class="panel-body p-t-0">
                    <div class="row">
                        <div class="col-md-12 align-center">
                            <h4>Invoice n°<textarea>12658757</textarea></h4>
                        </div>
                        <div class="col-md-12">
                            <div class="pull-left">
                                <h4 class="w-500 c-gray">FROM</h4>
                                <img src="assets/img/themeforest.png" class="img-responsive0" alt="themeforest">
                                <address>
                                    <strong><textarea class="width-300">ThemeForest Web Services, Inc.</textarea></strong><br>
                                    <textarea class="width-300">795 Folsom Ave, Suite 600</textarea><br>
                                    <textarea class="width-300">San Francisco, CA 94107</textarea><br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                            <div class="pull-right">
                                <h4 class="w-500 c-gray">TO</h4>
                                <img src="assets/img/logo-light.png" class="img-responsive" alt="themeforest">
                                <address>
                                    <strong><textarea class="width-300">Pixit Admin Template, Inc.</textarea></strong><br>
                                    <textarea class="width-300">795 Folsom Ave, Suite 600</textarea><br>
                                    <textarea class="width-300">San Francisco, CA 94107</textarea><br>
                                    <abbr title="Phone">P:</abbr> (123) 456-789
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 m-t-20 m-b-20">
                                    <p><strong>Invoice Date:</strong> <textarea>May 4, 2014</textarea></p>
                                    <p><strong>Due Date:</strong> <textarea>Mai 16, 2014</textarea></p>

                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width:65px" class="unseen text-center">QTY</th>
                                    <th class="text-left">DESCRIPTION</th>
                                    <th style="width:145px" class="text-right">UNIT PRICE</th>
                                    <th style="width:95px" class="text-right">TOTAL</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="item-row">
                                    <td class="delete-wpr">
                                        <textarea class="qty text-center">1</textarea>
                                        <a class="delete" href="javascript:;" title="Remove row"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td>
                                        <div class="text-primary"><strong><textarea>Template Customization</textarea></strong></div>
                                        <small><textarea class="width-100p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</textarea>
                                        </small>
                                    </td>
                                    <td>
                                        <textarea class="text-right cost">$79.00</textarea>
                                    </td>
                                    <td class="text-right price">$79.00</td>
                                </tr>
                                <tr class="item-row">
                                    <td class="delete-wpr">
                                        <textarea class="qty text-center">2</textarea>
                                        <a class="delete" href="javascript:;" title="Remove row"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td>
                                        <div class="text-primary"><strong><textarea>Email Template</textarea></strong></div>
                                        <small><textarea class="width-100p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</textarea>
                                        </small>
                                    </td>
                                    <td>
                                        <textarea class="text-right cost">$150.00</textarea>
                                    </td>
                                    <td class="text-right price">$300.00</td>
                                </tr>
                                <tr class="item-row">
                                    <td class="delete-wpr">
                                        <textarea class="qty text-center">1</textarea>
                                        <a class="delete" href="javascript:;" title="Remove row"><i class="fa fa-times"></i></a>
                                    </td>
                                    <td>
                                        <div class="text-primary"><strong><textarea>PSD Development</textarea></strong></div>
                                        <small><textarea class="width-100p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</textarea>
                                        </small>
                                    </td>
                                    <td>
                                        <textarea class="text-right cost">$85.00</textarea>
                                    </td>
                                    <td class="text-right price">$85.00</td>
                                </tr>
                                <tr id="hiderow">
                                    <td colspan="4"><a id="addrow" href="javascript:;" title="Add a row"><strong>Add an item</strong></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" rowspan="4"></td>
                                    <td class="text-right"><strong>Subtotal</strong></td>
                                    <td class="text-right" id="subtotal">$464.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right no-border"><strong>Shipping</strong></td>
                                    <td>
                                        <textarea class="text-right" id="shipping">$85.00</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right no-border"><strong>VAT Included in Total</strong></td>
                                    <td class="text-right">$0.00</td>
                                </tr>
                                <tr>
                                    <td class="text-right no-border"><div><strong>Total</strong></div></td>
                                    <td class="text-right" id="total">$549.00</td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="well">
                                Thank you for your business. Please make sure all cheques payable to <strong>ThemeForest Web Services, Inc.</strong> Account No. 35757745
                            </div>
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
    <script src="{{ asset('admin_pages/js/invoice.js')}}"></script>
@endsection