document.addEventListener('DOMContentLoaded', function () {
  // do your setup here
  AOS.init();
  console.log('Initialized app');
});

function useFetch(path, method = 'GET', body = null, callback = ()=> {}) {
  try {
    const url = 'http://restaurant.local/process' + path;
    fetch(url, {
      method: method,
      headers: {
        'Content-Type': 'application/json'
      },
      body: method === 'GET' ? null : JSON.stringify(body)
    })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          callback();
        } else {
          iziToast.error({
            title: 'Error',
            message: data.message
          });
        }
      })
      .catch(error => {
        console.log(error);
        iziToast.error({
          title: 'Error',
          message: error
        });
      });
  } catch (error) {
    iziToast.error({
      title: 'Error',
      message: error
    });
  }
}