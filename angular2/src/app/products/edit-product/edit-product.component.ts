import { Component, OnInit, Input, Output } from '@angular/core';
@Component({
  selector: 'edit-product',
  templateUrl: './edit-product.component.html',
  styleUrls: ['./edit-product.component.scss']
})
export class EditProductComponent implements OnInit {
   @Input() infoProduct;

  constructor() { }

  ngOnInit() {
  }

}
