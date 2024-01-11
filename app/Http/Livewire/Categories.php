<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;

class Categories extends Component
{
    public $category_name;
    public $selected_category_id;
    public $updateCategoryMode = false;

    public $subcategory_name;
    public $selected_subcategory_id;
    public $parent_category;
    public $updateSubCategoryMode = false;

    public $listeners = [
    'resetModalForm'
    ];

    public function resetModalForm(){
        $this->resetErrorBag();
        $this->category_name = null;
        $this->subcategory_name = null;
        $this->parent_category = null;
    }


    public function addCategory(){
        $this->validate([
        'category_name' =>'required|unique:categories,category_name'
        ]);

        $category  = new Category();
        $category ->category_name = $this->category_name;
        $saved = $category->save();

        if($saved){
            $this->dispatchBrowserEvent('hide_add_categories_modal');
            $this->category_name = null;
            toastr()->success('New category success added');
        }else{
            toastr()->error('Something went wrong!');
        }
    }

    public function editCategory($id){
        $category = Category::findOrFail($id);
        $this->selected_category_id = $category->id;
        $this->category_name = $category->category_name;
        $this->updateCategoryMode = true;
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('showCategoriesModal');

    }

    public function updateCategory(){
        if($this->selected_category_id){
            $this->validate([
            'category_name'=>'required|unique:categories,category_name,' . $this->selected_category_id,
            ]);
            $category = Category::findOrFail($this->selected_category_id);
            $category->category_name = $this->category_name;
            $update = $category->save();

            if($update){
                $this->dispatchBrowserEvent('hide_add_categories_modal');
                $this->updateCategoryMode = false;
                toastr()->success('Category updated successfully');
            }else{
                toastr()->error('Something went wrong!');
            }
        }
    }

    public function deleteCategory($id){
        $category = Category::findOrFail($id);
        if($category){
            $category->delete();
            toastr()->success('Category deleted successfully');
        }else{
            toastr()->error('Category not found');

        }
    }

    public function deleteSubcategory($id){
        $subcategory = Subcategory::findOrFail($id);
        if($subcategory){
            $subcategory->delete();
            toastr()->success('SubCategory deleted successfully');
        }else{
            toastr()->error('SubCategory not found');
        }
    }

    public function addSubCategory(){
        $this->validate([
        'parent_category' =>'required',
        'subcategory_name' =>'required|unique:sub_categories,subcategory_name'
        ]);

        $subcategory = new SubCategory();
        $subcategory->subcategory_name = $this->subcategory_name;
        $subcategory->slug = Str::slug($this->subcategory_name);
        $subcategory->parent_category = $this->parent_category;
        $saved = $subcategory->save();

        if($saved){
            $this->dispatchBrowserEvent('hide_add_subcategories_modal');
            $this->parent_category = null;
            $this->subcategory_name = null;
            toastr()->success('New SubCategory updated successfully');
        }else{
            toastr()->error('Something went wrong!');
        }

    }

    public function editSubCategory($id){
        $subcategory = SubCategory::findOrFail($id);
        $this->selected_subcategory_id = $subcategory->id;
        $this->parent_category = $subcategory->parent_category;
        $this->subcategory_name = $subcategory->subcategory_name;
        $this->updateSubCategoryMode = true;
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('showSubCategoriesModal');
    }

    public function updateSubCategory(){
        if($this->selected_subcategory_id){
            $this->validate([
            'parent_category' => 'required',
            'subcategory_name'  => 'required|unique:sub_categories,subcategory_name,' . $this->selected_subcategory_id,
            ]);

            $subcategory = SubCategory::findOrFail($this->selected_subcategory_id);
            $subcategory->subcategory_name = $this->subcategory_name;
            $subcategory->slug = Str::slug($this->subcategory_name);
            $subcategory->parent_category = $this->parent_category;
            $updated = $subcategory->save();

            if($updated){
                $this->dispatchBrowserEvent('hide_add_subcategories_modal');
                $this->updateSubCategoryMode = false;
                toastr()->success('SubCategory updated successfully');
            }else{
                toastr()->error('Something went wrong!');
            }
        }
    }

    public function render()
    {
        return view('livewire.categories',[
        'Categories'=> Category::orderBy('ordering','asc')->get(),
        'subCategories'=> SubCategory::orderBy('ordering','asc')->get(),
        ]);
    }
}
