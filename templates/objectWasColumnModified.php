public function wasColumnModified($col)
{
    return $this->lastModifiedColumns && isset($this->lastModifiedColumns[$col]);
}
