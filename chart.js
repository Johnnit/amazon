
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June','July','August','September','October','November','December'],
      datasets: [{
        label: 'Total sales per month',
        data: [12, 19, 3, 5, 2, 3,20,25,11,80,100,50],
        borderWidth: 1
      }]
    },
    options: {
        responsive: true
    }
  });

  const sales = document.getElementById('mySales');

  new Chart(sales, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
        responsive: true
    }
  });
