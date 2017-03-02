import { ModuleWithProviders } from "@angular/core";
import { RouterModule, Routes } from "@angular/router";
// Product
import { ProductsComponent } from './products.component';
import { AddProductComponent } from './add-product/add-product.component';
// Category
import { CategoryComponent } from './category/category.component';
import { AddCategoryComponent } from './category/add-category/add-category.component';

const routes : Routes = [
    {
        path: "",
        redirectTo: "products",
        pathMatch: 'full'
    },
    {
        path: "products",
        component:ProductsComponent
    },
    {
        path: "add-products",
        component:AddProductComponent
    },
    {
        path: "category",
        component:CategoryComponent
    },
    {
        path: "add-category",
        component:AddCategoryComponent
    },
]


export const routing : ModuleWithProviders = RouterModule.forChild(routes);
