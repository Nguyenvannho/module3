<?php

interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

// Triển khai interface iTemplate
// Thực hiện đúng, mã không lỗi
class Template implements iTemplate
{
    private array $vars = [];

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach ($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

// Thực hiện sai, mã gặp lỗi
// Fatal error: Class BadTemplate contains 1 abstract methods
// Nguyên nhân: Không cài đặt phương thức getHtml() đã mô tả trong iTemplate
// class BadTemplate implements iTemplate
// {
//     private array $vars = [];

//     public function setVariable($name, $var): void
//     {
//         $this->vars[$name] = $var;
//     }
// }

?>