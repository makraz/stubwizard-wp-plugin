<div class="px-10 py-6">
    <div class="mx-auto grid grid-cols-1 gap-4 sm:grid-cols-3 sm:items-start" data-controller="paycheck">
        <div class="col-span-full sm:col-span-1 px-5 py-3 bg-white rounded-3xl shadow border-1 border-third">
            <h1 class="text-primary text-lg font-semibold leading-10 text-center">Work info</h1>
            <div class="mt-6 grid grid-cols-1 gap-3">
                <div class="col-span-full">
                    <label for="status" class="block text-sm text-secondary leading-6">Marital Status</label>
                    <div class="mt-1">
                        <select data-paycheck-target="status" id="status" name="status" autocomplete="status-name" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-third sm sm:leading-6">
                            <option value="0">Single</option>
                            <option value="1">Married</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="state" class="block text-sm text-secondary leading-6">Location</label>
                    <div class="mt-1">
                        <select data-paycheck-target="state" id="state" name="state" autocomplete="state-name" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-third sm sm:leading-6">
                            <option value="CITY|California City|CA:California City, CA">California City, CA</option>
                            <option value="CITY|New York|NY:New York, NY">New York, NY</option>
                            <option value="CITY|Alabama|NY:Alabama, NY">Alabama, NY</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="payfq" class="block text-sm text-secondary leading-6">Pay Frequenecy</label>
                    <div class="mt-1">
                        <select data-paycheck-target="payfq" id="payfq" name="payfq" autocomplete="payfq" class="form-select appearance-none bg-no-repeat block w-full border-1 border-secondary rounded-lg py-1.5 px-3 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-third sm sm:leading-6">
                            <option value="1">Daily</option>
                            <option value="2">Weekly</option>
                            <option value="3">Bi-Weekly</option>
                            <option value="4">Semi-Monthly</option>
                            <option value="5">Monthly</option>
                            <option value="6">Quarterly</option>
                            <option value="7">Semi-Annually</option>
                            <option value="8">Annually</option>
                        </select>
                    </div>
                </div>
                <div class="col-span-full">
                    <label for="income" class="block text-sm text-secondary leading-6">Salary (per year)</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <span class="text-sm text-primary text-opacity-60 sm:text-sm">$</span>
                        </div>
                        <input data-paycheck-target="income" type="text" name="income" id="income" value="100000" class="block w-full border-1 border-secondary rounded-lg py-1.5 pl-8 pr-20 text-sm text-primary text-opacity-60 ring-0 focus:border-third focus:ring-2 focus:ring-third sm sm:leading-6 placeholder:text-primary placeholder:text-opacity-30" placeholder="0.00">
                    </div>
                </div>
                <div class="col-span-full">
                    <button data-action="click->paycheck#calculate" type="button" class="w-full rounded-full border-none bg-gradient-to-l from-secondary to-third py-1.5 px-5 text-base font-semibold text-white shadow-sm hover:bg-secondary focus:outline-none">
                        Calculate
                    </button>
                </div>
            </div>
        </div>

        <div class="col-span-full sm:col-span-2 px-5 py-3 bg-white rounded-3xl shadow border-1 border-third">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 sm:items-center">
                <div class="col-span-full sm:col-span-1 order-2 sm:order-1">
                    <table class="w-full text-sm whitespace-nowrap text-left rtl:text-right">
                        <thead class="text-primary text-lg font-semibold border-b-2 border-primary">
                        <tr>
                            <th scope="col" class="py-2 px-1 lg:px-6 lg:py-3">
                                Gross Paycheck
                            </th>
                            <th scope="col" class="py-2 px-1 lg:px-6 lg:py-3">

                            </th>
                            <th scope="col" class="py-2 px-1 lg:px-6 lg:py-3" data-paycheck-target="grossPay">
                                $37500.00
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr class="bg-white text-primary font-normal">
                            <th scope="row" class="py-2 px-1 lg:px-6 lg:py-3 text-primary font-normal">
                                <div class="inline-flex items-center gap-3">
                                    <svg class="w-5 h-5" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16.5206" cy="16.8515" r="16.4589" fill="#189AB4"/>
                                    </svg>

                                    Fica
                                </div>
                            </th>
                            <td class="py-2 px-1 lg:px-6 lg:py-3" data-paycheck-target="earningsPercent">
                                26%
                            </td>
                            <td class="py-2 px-1 lg:px-6 lg:py-3" data-paycheck-target="earningsTotal">
                                $9750.00
                            </td>
                        </tr>
                        <tr class="bg-white text-primary font-normal">
                            <th scope="row" class="py-2 px-1 lg:px-6 lg:py-3 text-primary font-normal">
                                <div class="inline-flex items-center gap-3">
                                    <svg class="w-5 h-5" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16.5206" cy="16.9345" r="16.4589" fill="#75E6DA"/>
                                    </svg>
                                    Taxes
                                </div>

                            </th>

                            <td class="py-2 px-1 lg:px-6 lg:py-3" data-paycheck-target="taxesPercent">
                                14%
                            </td>
                            <td class="py-2 px-1 lg:px-6 lg:py-3" data-paycheck-target="taxesTotal">
                                $5250.00
                            </td>
                        </tr>

                        </tbody>

                        <tfoot class=" border-t-2 border-primary">
                        <tr class="bg-white text-primary font-normal">
                            <th scope="row" class="py-2 px-1 lg:px-6 lg:py-3 text-primary font-normal">
                                <div class="inline-flex items-center gap-3">
                                    <svg class="w-5 h-5" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="16.5206" cy="16.5731" r="16.4589" fill="#05445E"/>
                                    </svg>

                                    Take Home
                                </div>

                            </th>
                            <td class="py-2 px-1 lg:px-6 lg:py-3" data-paycheck-target="takeHomePercent">
                                60%
                            </td>
                            <td class="py-2 px-1 lg:px-6 lg:py-3" data-paycheck-target="takeHomeTotal">
                                $22500.00
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="col-span-full sm:col-span-1 order-1 sm:order-2">
                    <div class="py-6" data-paycheck-target="chart" id="donut-chart"></div>
                </div>
            </div>
        </div>

    </div>
</div>