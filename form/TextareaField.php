<?php


namespace App\Core\Form;


use App\Core\Model;

class TextareaField extends BaseField
{
    public int $cols;
    public int $rows;

    public function __construct(Model $model, string $attribute, int $cols, int $rows)
    {
        $this->cols = $cols;
        $this->rows = $rows;
        parent::__construct($model, $attribute);
    }

    public function renderInput(): string
    {
        return sprintf(
            '<textarea name="%s" class="form-control%s" cols="%s" rows="%s">%s</textarea>',

            $this->attribute,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->cols,
            $this->rows,
            $this->model->{$this->attribute}
        );
    }
}