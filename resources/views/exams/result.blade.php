<form>
<select name="student_id">
    @foreach($students as $std)
        <option value='{{$std->id}}'>{{$std->name}}</option>
    @endforeach
</select>
<br>
@forech($questions as $q)
    <p>
      <span>  $loop->interation</span>
      <label>$q->name</label>
      <input type="hidden" name="result[{{$loop->index}}].question_id" value="{{$q->id}}" />

    <ol type="a">
            @foreach($q->answers as $ans)
                <li><input type="radio" name="result[{{$loop->index}}].answer_id" value="{{$ans->id}}"/>{{$ans->name}}</li>
            @endforeach
    </ol>
    </p>
@endforeach
<input type="submit" value="Save" />
</form>