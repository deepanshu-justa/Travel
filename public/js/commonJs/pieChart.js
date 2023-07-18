var PieChart = function (targetElementId, ajaxUrl, toCount) {

    var pieChartCanvas = $(targetElementId).get(0).getContext('2d')
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }

    $.ajax({
        type: "GET",
        url: ajaxUrl,
        success: function (response) {
            console.log(response);

            // Extracting the labels from the response objects
            var labels = response.map(function (obj) {
                return obj[toCount];
            });
            // Remove duplicate labels using Set
            var distinctLabels = [...new Set(labels)];
            // Count occurrences of each distinct label
            var labelCounts = distinctLabels.map(function (label) {
                return labels.filter(function (value) {
                    return value === label;
                }).length;
            });

            console.log(labels);
            var pieData = {
                labels: distinctLabels,
                datasets: [{
                    data: labelCounts,
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12',
                        '#00c0ef', '#3c8dbc', '#d2d6de'
                    ],
                }]
            }

            new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            });
        }
    });
}

// -------------------
// USAGE IN FRONT END
// -------------------
// <script>
// PieChart('#pieChart', '/leads/json', 'package');
// </script>