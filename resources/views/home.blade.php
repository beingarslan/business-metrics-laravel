@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Business Metrics List') }}</div>

                <div class="card-body">
                    <div class="list-group">
                        <a href="/business-metrics/gross-profit-margin" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Gross Profit Margin</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">Unlike net profit margin, gross profit margin shows a company’s profits before subtracting interest, taxes and operating expenses like rent, utilities and wages. A healthy gross profit margin plays an important factor in whether a business is able to cover all of its expenses.</p>
                            <small>Gross profit margin = (Revenue – Cost of goods or services sold) / Revenue x 100</small>
                        </a>

                        <a href="/business-metrics/net-profit-margin" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Net Profit Margin</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">One of the most important indicators of a business’s profitability, net profit margin measures how much actual profit is netted for each dollar of revenue made. This is important because revenue increases may not always translate into increased profitability. Before calculating the net profit margin, a business must calculate its net income.</p>
                            <small>Net profit margin = (Net income / Total revenue) x 100</small>
                        </a>

                        <a href="/business-metrics/operating-profit-margin" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Operating Profit Margin</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">Increasing operating margins can indicate better management and cost controls within a company.</p>
                            <small>Operating profit margin = gross profit - operating expenses/revenue X 100</small>
                        </a>

                        <a href="/business-metrics/return-to-equity" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Return on Equity</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">This measures the rate of return shareholders get on their investment after taxes.</p>
                            <small>Return on equity = net profit/shareholder's equity</small>
                        </a>

                        <a href="/business-metrics/debt-to-equity-ratio" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Debt-to-equity ratio</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">The debt-to-equity equation is a business formula that shows how much debt a company uses to finance its operations.
                                Total liabilities include all of the costs you must pay to outside parties, such as accounts payable, balances, interest, and principal payments on debt.
                                Total equity is how much of the company actually belongs to the owners. In other words, it’s the amount of money the owner has invested in his or her own company.</p>
                            <small>Debt-to-equity ratio = total liabilities ÷ total equity</small>
                        </a>

                        <a href="/business-metrics/return-on-investment" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Return on investment</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">Do you make wise investments? How can you tell?
                                You make wise investments when you gain more than what you paid. To find out how well you are investing your business’s money, find your return on investment (ROI) percentage.</p>
                            <small>Return on investment = (Net Return on Investment / Cost of Investment) × 100</small>
                        </a>

                        <a href="/business-metrics/inventory-shrinkage" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Inventory Shrinkage</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">Why you should know the inventory shrinkage formula
                                If you are seeing an increase in inventory shrinkage, there’s a good chance that someone is stealing from you. There is inventory listed in your accounting records that isn’t found in your actual inventory.
                                Inventory shrinkage could also result from miscounting, not using the right units of measure, or unclear cooperation with third parties. For example, your supplier could charge you for 100% of the goods you requested but only deliver 96% of them.
                            </p>
                            <small>Inventory Shrinkage = [(Recorded Inventory – Actual Inventory) / Recorded Inventory] X 100</small>
                        </a>

                        <a href="/business-metrics/break-even-point" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Break-even Point</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">It’s a point at which a company’s expenses are exactly covered by its sales.
                                In other words, it’s a production level where the total expenses are exactly the same as the total revenue for a product. <br>
                                Calculating the break-even point is a crucial financial analysis tool for business owners. A small business owner can use this formula to find out how many units of products they need to sell to cover production costs.
                            </p>
                            <small>Break-even Point = Fixed Costs / (Sales Price Per Unit – Variable Costs Per Unit)</small>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection