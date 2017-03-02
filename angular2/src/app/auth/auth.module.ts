import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { routing } from "./auth.routing";

import { AuthComponent } from './auth.component';
import { LoginComponent } from './login/login.component';
import { RegisterComponent } from './register/register.component';
import { UsersComponent } from './users/users.component';
@NgModule({
  imports: [
    CommonModule,
    routing
  ],
  declarations: [
      AuthComponent,
      LoginComponent,
      RegisterComponent,
      UsersComponent

  ]
})
export class AuthModule { }
