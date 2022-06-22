<?php

namespace App\Helpers;

use http\Env\Request;
use Illuminate\Support\Str;

class Helper
{
    public static function category($categories, $list_id = 0, $char = '')
    {
        $htlm = '';
        foreach ($categories as $key => $category) {
            if ($category->list_id == $list_id) {
                $htlm .= '
                     <tr>
                        <td style="width: 50px">' . $category->id . '</td>
                        <td>' . $char . $category->name . '</td>
                        <td>' . self::status($category->status) . '</td>
                        <td>' . $category->updated_at . '</td>
                        <td>
                        <a  class="btn btn-primary btn-sm" href="edit/' . $category->id . '">
                        <i class="fas fa-edit"></i>
                        </a>

                        <a href="#" class="btn btn-danger btn-sm"
                        onclick="removeRow(' . $category->id . ',\'' . route('categoryDestroy', $category->id) . '\')">
                        <i class="fas fa-trash"></i>
                        </a>
                                  </td>
                     </tr>
                    ';
                unset($categories[$key]);

                $htlm .= self::category($categories, $category->id, $char . '--');
            }
        }
        return $htlm;
    }

    public static function status($status = 0): string
    {
        return $status == 0 ? '<span class="btn btn-danger btn-xs">NO</span>' :
            '<span class="btn btn-success btn-xs">YES</span>';
    }

    public static function statusCustomer($status = 0): string
    {
        return $status == 1 ? '<span class="btn btn-danger btn-xs " >Chưa xác nhận</span>' :
            ($status == 2 ? '<span class="btn btn-warning btn-xs ">Đã xác nhận</span>' : (
            $status == 3 ? '<span class="btn btn-light btn-xs">Đang giao</span>' :
                '<span class="btn btn-success btn-xs">Đã giao</span>'
            ));
    }

    public static function categories($categories, $list_id = 0)
    {
        $html = '';
        foreach ($categories as $key => $category) {
            if ($category->list_id == $list_id) {
                $html .= '
                    <li>
                        <a href="/treeshopHAT/public/danh-muc/' . $category->id . '-' . Str::slug($category->name, '-') . '.html">
                            ' . $category->name . '
                        </a>';



                if (self::isChild($categories, $category->id)) {
                    $html .= '<ul class="sub-menu">';
                    $html .= self::categories($categories, $category->id);
                    $html .= '</ul>';
                }

                $html .= '</li>';
            }
        }
        return $html;
    }

    public static function isChild($categories, $id): bool
    {
        foreach ($categories as $category) {
            if ($category->list_id == $id) {
                return true;
            }
        }
        return false;
    }

    public static function price($price = 0, $priceSale = 0)
    {
        if ($priceSale != 0) return number_format($priceSale);
        if ($price != 0) return number_format($price);
        return '<a href="/lien-he.html">Liên Hệ</a>';
    }
}


