import { Http, Response, Headers } from "@angular/http";
import { Injectable } from "@angular/core";
import { ModelProducts } from "./model.products";
import { Observable } from 'rxjs/Rx';
import "rxjs/add/operator/map";
@Injectable()
export class ServiceProducts{

    listProducts : ModelProducts[] = [];
    url : string = "http://laravel.app/api/";

    constructor(private _http : Http){}

    getProducts() : Observable<ModelProducts[]> {
        return this._http.get(this.url+"list-products")
                .map((response : Response) => response.json());
    }

    deleteProducts($id) : Observable<string> {
        return this._http.delete(this.url+"delete-products/"+$id)
                    .map((response : Response) => response.json());
    }

    editProducts($product : any) : Observable<any> {
        let id : number = $product.id;
        return this._http.put(this.url+'edit-products/'+id,$product)
                    .map((response : Response) => response.json());
    }






}
