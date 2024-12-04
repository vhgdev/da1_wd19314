<?php
class SearchController {
    public function search(){
        $keyword = $_GET['keyword'] ??'';
        $products = (new Product)->searchProductName($keyword);
        return view('client.product.search', compact('products','categories','keyword'));
    }
}