document.addEventListener('DOMContentLoaded', function() {
    var audienceOptions = {
        chart: { type: 'line', height: 350 },
        series: [{ name: 'Sessions', data: [1000, 1200, 1400, 1600, 1800, 2000] }],
        xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'] }
    };
    var visitorsOptions = {
        chart: { type: 'bar', height: 200 },
        series: [{ name: 'Visitors', data: [500, 600, 700, 800, 900, 1000] }],
        xaxis: { categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] }
    };
    var trafficOptions = {
        chart: { type: 'pie', height: 250 },
        series: [10853, 2545, 1836, 1958, 1566],
        labels: ['Organic', 'Direct', 'Referral', 'Email', 'Social']
    };
    new ApexCharts(document.querySelector("#audience_overview"), audienceOptions).render();
    new ApexCharts(document.querySelector("#visitors_report"), visitorsOptions).render();
    new ApexCharts(document.querySelector("#traffic_sources"), trafficOptions).render();
});
