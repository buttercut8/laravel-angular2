import { Component, OnInit, EventEmitter } from '@angular/core';
import { ModelProducts } from "./shared-product/model.products";
import { Observable } from 'rxjs/Rx';
import { ServiceProducts } from "./shared-product/service.products";
declare var Materialize,$ : any;
@Component({
  selector: 'products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss'],
  providers:[ServiceProducts]
})
export class ProductsComponent implements OnInit {

  allProducts : any = [];

  constructor(private _httpService : ServiceProducts) { }

  ngOnInit() {
        this._httpService.getProducts().subscribe(
            data => this.allProducts = data,
            error => console.log("get data error :"+error),
        );
  }


  onDelete(e,product){
      e.preventDefault();
      let index = this.allProducts.indexOf(product);
      this.allProducts.splice(index,1);
      this._httpService.deleteProducts(product.id).subscribe(
            data =>Materialize.toast('<span class="success">'+data+'</span>','3000','rounded'),
            error => console.log("delete error :"+error),
      )
  }
  onEdit(e,product){
       e.preventDefault();
       let data : any = [];
       $('#modal_edit').modal();
       console.log(product)

        // return this._httpService.editProducts(product).subscribe(
        //             data => console.log(data),
        //             error => console.log(error),
        //         );
  }

  handingEdit(){

  }





  // import { , ViewChild, ElementRef } from '@angular/core';
  // import { , ViewChild, ElementRef } from '@angular/core';
  // @ViewChild('fileInput') fileInput:ElementRef;
  // <input  #fileInput type="file" id="imgFile">
  // <button id="btnAdd" type="submit" (click)="showImageBrowseDlg()">Add Picture</button>
 //  showImageBrowseDlg() {
 //     let event = new MouseEvent('click', {bubbles: true});
 //     this.fileInput.nativeElement.click()
 // }



}
