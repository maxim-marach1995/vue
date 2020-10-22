<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     *
     * Наименование таблицы
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     *
     * Аттрибуты для заполнения
     *
     * sort|unsignedTinyInteger|max:255|default:50 - Сортировка
     * name|string|max:255 - Названия задачи
     * text|text|max:65535 - Текст задачи
     * check|boolean|default:false - Статус
     *
     * @var array
     */
    protected $fillable = [
        'sort',
        'name',
        'text',
        'check',
    ];
}
