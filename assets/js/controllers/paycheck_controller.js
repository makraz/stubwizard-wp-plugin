import {Controller} from "@hotwired/stimulus";
import ApexCharts from 'apexcharts';

export default class extends Controller {

    static targets = [ 'status', 'state', 'payfq', 'income','chart', 'grossPay', 'earningsPercent','earningsTotal','taxesPercent','taxesTotal', 'takeHomePercent','takeHomeTotal' ]

    connect(){
        this.chart = new ApexCharts(this.chartTarget, this.getChartOptions);
        this.chart.render();
    }


    async calculate() {

        const res = await fetch('https://stubwizard.wip/a/api/paycheck', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify( {
                status: this.statusTarget.value,
                state: this.stateTarget.value,
                payfq:  this.payfqTarget.value,
                income: this.incomeTarget.value
            })
        })

        const data = await res.json();

        console.log(data)

        this.grossPayTarget.textContent = this.formatValue(data.grossPay, false);
        this.earningsPercentTarget.textContent = this.formatValue(data.fica.percent, true);
        this.earningsTotalTarget.textContent = this.formatValue(data.fica.total, false);
        this.taxesPercentTarget.textContent = this.formatValue(data.taxes.percent, true);
        this.taxesTotalTarget.textContent = this.formatValue(data.taxes.total, false);
        this.takeHomePercentTarget.textContent = this.formatValue(data.takeHome.percent, true);
        this.takeHomeTotalTarget.textContent = this.formatValue(data.takeHome.total, false);

        this.chart.updateSeries(
            [
                parseFloat(data.takeHome.total),
                parseFloat(data.taxes.total),
                parseFloat(data.fica.total),
            ]
        );
    }

    formatValue(value, isPercentage = false) {
        return isPercentage ? `%${value}` : `$${value}`;
    }

    get getChartOptions(){
        return {
            series: [22500, 5250, 9750 ],
            colors: ["#05445E", "#75E6DA", "#189AB4"],
            chart: {
                width: "100%",
                type: "donut",
            },
            stroke: {
                width: 4,
                colors: ['#FFF'],
                borderRadius: 5
            },

            plotOptions: {
                pie: {
                    donut: {
                        size: '70%',
                        labels: {
                            show: true,
                            name: {
                                show: false,
                                fontFamily: "Inter, sans-serif",
                                offsetY: 20,
                            },
                            total: {
                                showAlways: true,
                                show: true,
                                label: "Unique visitors",
                                fontFamily: "Inter, sans-serif",
                                formatter: function(w) {
                                    const sum = w.globals.seriesTotals.reduce((a, b) => {
                                        return a + b
                                    }, 0)
                                    return `$${sum}`
                                },
                            },
                            value: {
                                show: true,
                                fontFamily: "Inter, sans-serif",

                                formatter: function(value) {
                                    return "$" + value
                                },
                            },
                        },

                    },
                },
            },
            grid: {
                padding: {
                    top: -2,
                },
            },
            labels: ["Earnings", "Taxes", "Tax Home"],
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
                position: "bottom",
                fontFamily: "Inter, sans-serif",
                fontSize: '120px'
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return "$" + value
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function(value) {
                        return "$" + value
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        }
    }
}