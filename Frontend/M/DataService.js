class DataService{
    constructor(){

    }

    getData(apivegpont, callback){
        axios.get(apivegpont)
        .then(function (response) {
          //console.log("Válasz objektum",response);
          //console.log("adatok",response.data);
          //console.log("státusz",response.status);
          //console.log("Státusz szöveg",response.statusText);
          //console.log("Válasz fejléc",response.headers);
          //console.log("Válasz config",response.config);
          callback(response.data)
          
        })
        .catch(function (error) {
          hibacallback(error)
        })
        .finally(function () {
          // always executed
        });
    }
    postData(url, data, callback) {
        axios.post(url, data)
          .then(response => {
            callback(response.data);
          })
          .catch(error => {
            console.error(error);
          });
        }
    }

export default DataService