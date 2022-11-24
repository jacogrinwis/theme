<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = null)
    {
        $this->type = $type;
    }

    public function typeClass()
    {
        switch ($this->type) {
            case 'info':
                return 'p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800 shadow';
                break;
            case 'danger':
                return 'p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 shadow';
                break;
            case 'success':
                return 'p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 shadow';
            case 'warning':
                return 'p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800 shadow';
                break;
            case 'dark':
                return 'p-4 mb-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300 shadow';
                break;
            default:
                return 'p-4 mb-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300 shadow';
        }
    }

    public function typeAlert()
    {
        switch ($this->type) {
            case 'info':
                return 'Info Alert!';
                break;
            case 'danger':
                return 'Danger Alert!';
                break;
            case 'success':
                return 'Success Alert!';
                break;
            case 'warning':
                return 'Warning Alert!';
                break;
            case 'dark':
                return 'Alert!';
                break;
            default:
                return 'Alert!';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
