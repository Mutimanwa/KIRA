// Données statiques pour l'exemple
var chartOptions = {
    series: [{
      name: "Nombre d'actions",
      data: [45, 20, 15, 8] // Remplacez par les données réelles
    }],
    chart: {
      type: 'bar',
      height: 350,
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    xaxis: {
      categories: ['Modifications', 'Connexions', 'Créations', 'Suppressions'],
      title: {
        text: "Type d'action"
      }
    },
    yaxis: {
      title: {
        text: "Nombre d'actions"
      }
    },
    fill: {
      opacity: 1,
      colors: ['#0d6efd', '#28a745', '#17a2b8', '#dc3545']
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val + " actions"
        }
      }
    }
  };
  
  const chartContainer = new ApexCharts(document.querySelector("#audit-chart"), chartOptions);
  chartContainer.render();