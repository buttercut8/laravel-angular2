import { Http, Headers, Response } from "@angular/http";
import { Injectable } from "@angular/core";
import "rxjs/add/operator/map";
import { Observable } from 'rxjs/Rx';
import { ModelCategory } from "./model.category";
@Injectable()

export class ServiceCategory {
    listCategory : ModelCategory[] = [];
        url : string = 'http://laravel.app/api/list-category';
    constructor (private _http : Http){};

    getCategory(){
        return this._http.get('')
    }


}
