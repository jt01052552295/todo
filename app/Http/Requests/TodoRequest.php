<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string required 할일 제목 Example: 책 읽기
 * @bodyParam content longText 할일 내용. Example: 자기개발에 대한 책을 읽자
 * @bodyParam deadline date 마감기한 No-example
 * @bodyParam isDone boolean required 완료여부 Example: true
 */
class TodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      // 사용자 로그인 유무
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // 유효성 체크
        return [
          'title' => 'required|max:50',
          'content' => 'max:255',
          'deadline' => 'date',
          'isDone' => 'required|boolean',
        ];
    }
}
