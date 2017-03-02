export class ModelProducts{
    private name : string ;
    private description : string ;
    private images : string ;
    private price : number ;
    private category_id : number ;
    private user_id : number ;

    constructor(name_product : string,description_product : string,images_product : string,category_product : number,price_product : number,user_product : number){
        this.name = name_product;
        this.description = description_product;
        this.images = images_product;
        this.category_id = category_product;
        this.price = price_product;
        this.user_id = user_product;
    }
}
