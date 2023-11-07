import DataService from "../M/DataService.js";
const newWriter = {
    nev: "Bárki",
    szul: "1994"
  };
export class Controller {
    
  constructor() {
    this.dataService = new DataService();
    this.dataService.getData("http://localhost:8000/writers", this.megjelenít);
    this.dataService.postData("http://localhost:8000/writers", newWriter, this.megjelenít);
  
}

  megjelenít(list) {
    console.log(list);
  }
  

}
