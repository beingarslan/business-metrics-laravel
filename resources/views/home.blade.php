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

                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Return on Equity</h5>
                                <!-- <small>3 days ago</small> -->
                            </div>
                            <p class="mb-1">This measures the rate of return shareholders get on their investment after taxes.</p>
                            <small>Return on equity = net profit/shareholder's equity</small>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
