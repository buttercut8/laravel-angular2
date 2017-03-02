import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { routing } from "./products.routing";
// Product
import { ProductsComponent } from './products.component';
import { AddProductComponent } from './add-product/add-product.component';
import { EditProductComponent } from './edit-product/edit-product.component';
// Category
import { CategoryComponent } from './category/category.component';
import { AddCategoryComponent } from './category/add-category/add-category.component';
@NgModule({
  imports: [
    CommonModule,
    routing
  ],
  declarations: [
      // Product
      ProductsComponent,
      AddProductComponent,
      EditProductComponent,
    //
      CategoryComponent,
      AddCategoryComponent,
  ]
})
export class ProductsModule { }
