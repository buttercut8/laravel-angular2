import { ModuleWithProviders } from "@angular/core";
import { RouterModule, Routes } from "@angular/router";

import { NotfoundComponent } from "./notfound/notfound.component";
const routes : Routes = [
    {
        path:'',
        redirectTo: 'auth-social',
        pathMatch: 'full'
    },
    {
        path:'auth-social',
        loadChildren:'app/auth/auth.module#AuthModule'
    },
    {
        path:'all-products',
        loadChildren:'app/products/products.module#ProductsModule'
    },
    {
        path:'**',
        component:NotfoundComponent
    },
]
export const routing : ModuleWithProviders = RouterModule.forRoot(routes);
