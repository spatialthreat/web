@foreach($contents as $asset_content)

  <tr class="hidding">
    <td>{{ $asset_content->quantity }}</td>
    <td>
      @include('web::partials.type', ['type_id' => $asset_content->type->typeID, 'type_name' => $asset_content->type->typeName, 'variation' => $asset_content->type->group->categoryID == 9 ? 'bpc' : 'icon'])
    </td>
    <td>{{ number_metric($asset_content->quantity * $asset_content->volume) }} m&sup3;</td>
    <td>{{ $asset_content->type->group->groupName  }}</td>
    <td>{{ $asset_content->location_flag }}</td>
  </tr>

@endforeach
